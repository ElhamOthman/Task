<?php
namespace studentManagment;

class Student {

    private $id;
    private $name;
    private $email;
    private $courses;
    public function __construct(int $id ,string $name,string $email , array $courses = [])   {
   $this->id=$id;
   $this->name = $name ;
   $this->mail=$email;
   $this->courses= $courses;
}


public function getId(){
    return $this->id;
}
public function getName(){
    return $this->name;
}
public function getEmail(){
    return $this->email;
}
public function getCourses(){
return $this->courses;
}
public function addCourse(Course $courses){
    $this->courses[] = $course;
}
}

?>
