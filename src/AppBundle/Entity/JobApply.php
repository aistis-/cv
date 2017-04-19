<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Evaluation;
use AppBundle\Entity\JobAd;
use AppBundle\Entity\UserSeeker;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * JobApply
 *
 * @ORM\Table(name="job_apply")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\JobApplyRepository")
 */
class JobApply
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cv", type="string", length=255)
     */
    private $cv;

    /**
     * One JobApply has One Evaluation.
     * @ORM\OneToOne(targetEntity="Evaluation", inversedBy="jobApply")
     * @ORM\JoinColumn(name="evaluation_id", referencedColumnName="id")
     */
    private $evaluation;

    /**
     * @var string
     *
     * @ORM\Column(type="string", nullable=true)
     * @Assert\Url()
     */
    private $assignment_solution;

    /**
     * Many JobApply have One JobAd.
     * @ORM\ManyToOne(targetEntity="JobAd", inversedBy="jobApply")
     * @ORM\JoinColumn(name="jobAd_id", referencedColumnName="id")
     */
    private $jobAd;

    /**
     * Many JobApply have One UserSeeker.
     * @ORM\ManyToOne(targetEntity="UserSeeker", inversedBy="jobApply")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set cv
     *
     * @param string $cv
     *
     * @return JobApply
     */
    public function setCv($cv)
    {
        $this->cv = $cv;

        return $this;
    }

    /**
     * Get cv
     *
     * @return string
     */
    public function getCv()
    {
        return $this->cv;
    }

    /**
     * @return string
     */
    public function getAssignmentSolution()
    {
        return $this->assignment_solution;
    }

    /**
     * @param string $assignment_solution
     */
    public function setAssignmentSolution($assignment_solution)
    {
        $this->assignment_solution = $assignment_solution;
    }

    /**
     * @return mixed
     */
    public function getOwner()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setOwner($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getJobAd()
    {
        return $this->jobAd;
    }

    /**
     * @param mixed $jobAd
     */
    public function setJobAd($jobAd)
    {
        $this->jobAd = $jobAd;
    }

}
