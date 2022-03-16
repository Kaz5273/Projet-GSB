<?php

namespace App\Entity;

use App\Repository\VisitesRepository;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VisitesRepository::class)
 * @ApiResource
 */
class Visites
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $vst_date;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $vst_commentaire;

    /**
     * @ORM\ManyToOne(targetEntity=Praticiens::class, inversedBy="pra_visites")
     */
    private $vst_praticien_id;

    /**
     * @ORM\ManyToOne(targetEntity=Visiteur::class, inversedBy="vis_vistes")
     */
    private $vst_visiteur_id;

    /**
     * @ORM\ManyToOne(targetEntity=Motifs::class, inversedBy="mot_visites")
     */
    private $vst_motif_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVstDate(): ?\DateTimeInterface
    {
        return $this->vst_date;
    }

    public function setVstDate(?\DateTimeInterface $vst_date): self
    {
        $this->vst_date = $vst_date;

        return $this;
    }

    public function getVstCommentaire(): ?string
    {
        return $this->vst_commentaire;
    }

    public function setVstCommentaire(?string $vst_commentaire): self
    {
        $this->vst_commentaire = $vst_commentaire;

        return $this;
    }

    public function getVstPraticienId(): ?praticiens
    {
        return $this->vst_praticien_id;
    }

    public function setVstPraticienId(?praticiens $vst_praticien_id): self
    {
        $this->vst_praticien_id = $vst_praticien_id;

        return $this;
    }

    public function getVstVisiteurId(): ?visiteur
    {
        return $this->vst_visiteur_id;
    }

    public function setVstVisiteurId(?visiteur $vst_visiteur_id): self
    {
        $this->vst_visiteur_id = $vst_visiteur_id;

        return $this;
    }

    public function getVstMotifId(): ?motifs
    {
        return $this->vst_motif_id;
    }

    public function setVstMotifId(?motifs $vst_motif_id): self
    {
        $this->vst_motif_id = $vst_motif_id;

        return $this;
    }
}
