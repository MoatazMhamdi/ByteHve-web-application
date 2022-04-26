<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Localisation
 *
 * @ORM\Table(name="localisation")
 * @ORM\Entity
 */
class Localisation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_emplacement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEmplacement;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_emplacement", type="string", length=50, nullable=false)
     */
    private $nomEmplacement;

    /**
     * @var string
     *
     * @ORM\Column(name="d_emplacement", type="string", length=80, nullable=false)
     */
    private $dEmplacement;

    public function getIdEmplacement(): ?int
    {
        return $this->idEmplacement;
    }

    public function getNomEmplacement(): ?string
    {
        return $this->nomEmplacement;
    }

    public function setNomEmplacement(string $nomEmplacement): self
    {
        $this->nomEmplacement = $nomEmplacement;

        return $this;
    }

    public function getDEmplacement(): ?string
    {
        return $this->dEmplacement;
    }

    public function setDEmplacement(string $dEmplacement): self
    {
        $this->dEmplacement = $dEmplacement;

        return $this;
    }


}