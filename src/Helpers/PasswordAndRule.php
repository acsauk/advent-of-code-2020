<?php declare(strict_types=1);


namespace App\Helpers;


class PasswordAndRule
{
    private int $minRule;
    private int $maxRule;
    private string $ruleLetter;
    private string $password;

    /**
     * @return int
     */
    public function getMinRule(): int
    {
        return $this->minRule;
    }

    /**
     * @param int $minRule
     * @return PasswordAndRule
     */
    public function setMinRule(int $minRule): PasswordAndRule
    {
        $this->minRule = $minRule;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxRule(): int
    {
        return $this->maxRule;
    }

    /**
     * @param int $maxRule
     * @return PasswordAndRule
     */
    public function setMaxRule(int $maxRule): PasswordAndRule
    {
        $this->maxRule = $maxRule;
        return $this;
    }

    /**
     * @return string
     */
    public function getRuleLetter(): string
    {
        return $this->ruleLetter;
    }

    /**
     * @param string $ruleLetter
     * @return PasswordAndRule
     */
    public function setRuleLetter(string $ruleLetter): PasswordAndRule
    {
        $this->ruleLetter = $ruleLetter;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return PasswordAndRule
     */
    public function setPassword(string $password): PasswordAndRule
    {
        $this->password = $password;
        return $this;
    }
}
