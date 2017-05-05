<?php




class Ficha{

    private $id;
    private $user;
    private $campus;
    private $disciplina;
    private $nivel;
    private $q1;
    private $q2;
    private $q3;
    private $q4;
    private $q5;
    private $q6;
    private $parecer;




    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getCampus()
    {
        return $this->campus;
    }

    /**
     * @param mixed $campus
     */
    public function setCampus($campus)
    {
        $this->campus = $campus;
    }

    /**
     * @return mixed
     */
    public function getDisciplina()
    {
        return $this->disciplina;
    }

    /**
     * @param mixed $disciplina
     */
    public function setDisciplina($disciplina)
    {
        $this->disciplina = $disciplina;
    }

    /**
     * @return mixed
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * @param mixed $nivel
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;
    }

    /**
     * @return mixed
     */
    public function getQ1()
    {
        return $this->q1;
    }

    /**
     * @param mixed $q1
     */
    public function setQ1($q1)
    {
        $this->q1 = $q1;
    }

    /**
     * @return mixed
     */
    public function getQ2()
    {
        return $this->q2;
    }

    /**
     * @param mixed $q2
     */
    public function setQ2($q2)
    {
        $this->q2 = $q2;
    }

    /**
     * @return mixed
     */
    public function getQ3()
    {
        return $this->q3;
    }

    /**
     * @param mixed $q3
     */
    public function setQ3($q3)
    {
        $this->q3 = $q3;
    }

    /**
     * @return mixed
     */
    public function getQ4()
    {
        return $this->q4;
    }

    /**
     * @param mixed $q4
     */
    public function setQ4($q4)
    {
        $this->q4 = $q4;
    }

    /**
     * @return mixed
     */
    public function getQ5()
    {
        return $this->q5;
    }

    /**
     * @param mixed $q5
     */
    public function setQ5($q5)
    {
        $this->q5 = $q5;
    }

    /**
     * @return mixed
     */
    public function getQ6()
    {
        return $this->q6;
    }

    /**
     * @param mixed $q6
     */
    public function setQ6($q6)
    {
        $this->q6 = $q6;
    }

    /**
     * @return mixed
     */
    public function getParecer()
    {
        return $this->parecer;
    }

    /**
     * @param mixed $parecer
     */
    public function setParecer($parecer)
    {
        $this->parecer = $parecer;
    }


}