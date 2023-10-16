<?php
namespace App\Models;

use Core\DB;
use DateTime;
use PDO;

class ProgramModel extends DB{
    static $table ="program";
    static function create($params){
        return DB::prepareInsetInto(self::$table, $params)->flush();
    }

    static function update($params){
        return DB::prepareUpdate(self::$table, $params)->flush();
    }

    static function delete($params){
        return DB::prepareDelete(self::$table, $params)->flush();
    }

    static function get($id){
        return DB::pdo()->query("SELECT  * from ".self::$table." left join diploma on diploma_id = program.program_diploma_id left join sector on sector_id = program_sector_id where program_id='$id'")->fetch();
    }
    static function getSubjects($id){
        return DB::pdo()->query("SELECT  * from  program_subject right join program on program_id = program_subject.program_subject_program_id  where program_id='$id' and program_subject_id is not null")->fetchAll();
    }

    static function getAll(){
        return DB::pdo()->query("SELECT * from program LEFT join sector on sector.sector_id=program.program_sector_id LEFT JOIN  diploma on diploma.diploma_id = program.program_diploma_id
         order by program_createdAt DESC")->fetchAll();
    }

    static function getAllInstitutes($program,$page,$perpage=10,  $cols=null, $additionnalWhere="", $countAddCols=null, $countCallback = null ){
        $result= DB::getPaginateData("admission_group",$page,$perpage,(empty($cols) ? "*":""), " 
        LEFT JOIN institution ON institution.institution_id = admission_group.admission_group_institution_id 
        LEFT JOIN town ON town_id=institution_town_id 
        WHERE institution_isGroup = 0  and admission_group.admission_group_program_id = '$program'  $additionnalWhere",true);
        
        $languageFr = 


        $data=[];

        while($row = $result[1]->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)){
            $d=[
                "institution_id"=>$row["institution_id"],
                "institution_name"=>$row["institution_name"],
                "institution_description" =>$row["institution_description"],
                "institution_logoUrl"=>$row["institution_logoUrl"],
                "institution_isGroup" => $row["institution_isGroup"],
                "institution_type"=>$row["institution_type"],
                "institution_contactEmail"=>$row["institution_contactEmail"],
                "institution_supported_languages"=>$row["institution_supported_languages"],
                "institution_adress"=>$row["institution_adress"]
            ];
            if(empty($data[$d["institution_id"]])){
                $data[$d["institution_id"]]=$d;
            }
            $admission = array_diff($row, $d);
            $admission["now"]=(new DateTime())->format("Y-m-d H:i:s");
            $data[$d["institution_id"]]["admissions"]=[
                ...(empty($data[$d["institution_id"]]["admissions"]) ? [] : $data[$d["institution_id"]]["admissions"]),
                $admission 
            ];

        }
        $result[1] =$data;
        return $result;
    }

    static function getPaginated($currentPage,$per_page=10, $columnStmt="", $additionStmt=""){
        $r= DB::getPaginateData(self::$table, $currentPage,$per_page, $columnStmt, $additionStmt);
        return $r;
    }
}