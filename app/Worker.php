<?php 

namespace App;

abstract class Worker
{

    private string $name;
    private int $age;
    private array $hours;

    private string $position;
    
    private int $experience;




    public function __construct(string $name, int $age, array $hours){
        $this->name = $name;
        $this->age = $age;
        $this->hours = $hours;
    }


    public function getName(): string{
        return $this->name;
    }

    public function setName(string $name): void{
        $this->name = $name;
    }

    public function getAge(): int{
        return $this->age;
    }

    public function setAge(int $age): void{
        $this->age = $age;
    }



    public function getHours(): array{
        return $this->hours;
    }

    public function setHours(array $hours): void{
        $this->hours = $hours;
    }


    public function getPosition(): string{
        return $this->position;
    }

    public function setPosition(string $position): void{
        $this->position = $position;
    }


    public function getExperience(): int{
        return $this->experience;
    }
    
    public function setExperience(int $experience): void{
        $this->experience = $experience;
    }

    abstract public function work();


}




