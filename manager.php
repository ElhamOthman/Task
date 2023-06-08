<?php
namespace studentManagment;
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
$manager = new Manager();

$student1 = $manager->addStudent(1, "John Doe", "johndoe@example.com");
$student1->courses[] = new Course(1, "Math");
$student1->courses[] = new Course(2, "Science");

// Get student by ID
$student = $manager->getStudentById(1);
if ($student != null) {
    echo "Student found: " . $student->name . "\n";
    echo "Courses: \n";
    foreach ($student->courses as $course) {
        echo $course->name . "\n";
    }
}





















?>
