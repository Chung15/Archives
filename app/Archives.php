<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Archives extends Model
{
	/**
	*
	*/
	private $others;


	/**
	*
	*/
	private $leaves;


	/**
	*
	*/
	private $trainings;


	/**
	*
	*/
	private $thesisTopics;


	/**
	*
	*/
	private $publications;


	/**
	*
	*/
	private $diplomas;


	/**
	*
	*/
	private $children;


	/**
	*
	*/
	private $academicTitles;


	/**
	*
	*/
	private $academicDegrees;


	/**
	*
	*/
	private $user;





	    function __construct(User $user) {

	    	$this->others= $user->other()->get();

	    	$this->children = $user->child()->get();

	    	$this->trainings = $user->training()->get();

	    	$this->leaves = $user->leave()->get();

	    	$this->publications = $user->publication()->get();

	    	$this->diplomas = $user->diploma()->get();

	    	$this->academicDegrees = $user->degree()->get();

	    	$this->academicTitles = $user->title()->get();

	    	$this->thesisTopics = $user->thesisTopic()->get();

	    	$this->user = $user;
    	}

	    public function getOhters(){
	    	return $this->others;
	    }



	    public function getChildren(){
	    	return $this->children;
	    }

	    public function getrainings(){
	    	return $this->trainings;
	    }

	    public function getLeaves(){
	        return $this->leaves;
	        }

		public function getPublications(){
			return $this->publications;
			}

		public function getDiplomas(){
			return $this->diplomas;
			}

		public function getAcademicTitles(){
			return $this->academicTitles;
			}

		public function getAcademicDegrees(){
			return $this->academicDegrees;
			}

		public function getThesisTopics(){
			return $this->thesisTopics;
			}

		public function getUser(){
	    	return $this->user;
	    }

    

}
