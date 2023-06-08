<?php


namespace StudentManagement;

class Manager
{
    use Loggable;

    private $students;

    public function __construct()
    {
        $this->students = [];
    }

    public function addStudent(Student $student)
    {
        $this->students[$student->getId()] = $student;
        $this->log('Added student: ' . $student->getName());
    }

    public function getStudent(string $id): ?Student
    {
        return $this->students[$id] ?? null;
    }

    public function updateStudent(Student $student)
    {
        if (isset($this->students[$student->getId()])) {
            $this->students[$student->getId()] = $student;
            $this->log('Updated student: ' . $student->getName());
        }
    }

    public function deleteStudent(string $id)
    {
        if (isset($this->students[$id])) {
            $name = $this->students[$id]->getName();
            unset($this->students[$id]);
            $this->log('Deleted student: ' . $name);
        }
    }

}





















?>