<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationSubmission File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* EducationSubmission class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class EducationSubmission extends Entity
{
    /**
    * Gets the recipient
    *
    * @return EducationSubmissionRecipient The recipient
    */
    public function getRecipient()
    {
        if (array_key_exists("recipient", $this->_propDict)) {
            if (is_a($this->_propDict["recipient"], "Microsoft\Graph\Model\EducationSubmissionRecipient")) {
                return $this->_propDict["recipient"];
            } else {
                $this->_propDict["recipient"] = new EducationSubmissionRecipient($this->_propDict["recipient"]);
                return $this->_propDict["recipient"];
            }
        }
        return null;
    }
    
    /**
    * Sets the recipient
    *
    * @param EducationSubmissionRecipient $val The recipient
    *
    * @return EducationSubmission
    */
    public function setRecipient($val)
    {
        $this->_propDict["recipient"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    *
    * @return EducationSubmissionStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "Microsoft\Graph\Model\EducationSubmissionStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new EducationSubmissionStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    *
    * @param EducationSubmissionStatus $val The status
    *
    * @return EducationSubmission
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
    /**
    * Gets the submittedBy
    *
    * @return IdentitySet The submittedBy
    */
    public function getSubmittedBy()
    {
        if (array_key_exists("submittedBy", $this->_propDict)) {
            if (is_a($this->_propDict["submittedBy"], "Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["submittedBy"];
            } else {
                $this->_propDict["submittedBy"] = new IdentitySet($this->_propDict["submittedBy"]);
                return $this->_propDict["submittedBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the submittedBy
    *
    * @param IdentitySet $val The submittedBy
    *
    * @return EducationSubmission
    */
    public function setSubmittedBy($val)
    {
        $this->_propDict["submittedBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the submittedDateTime
    *
    * @return \DateTime The submittedDateTime
    */
    public function getSubmittedDateTime()
    {
        if (array_key_exists("submittedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["submittedDateTime"], "\DateTime")) {
                return $this->_propDict["submittedDateTime"];
            } else {
                $this->_propDict["submittedDateTime"] = new \DateTime($this->_propDict["submittedDateTime"]);
                return $this->_propDict["submittedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the submittedDateTime
    *
    * @param \DateTime $val The submittedDateTime
    *
    * @return EducationSubmission
    */
    public function setSubmittedDateTime($val)
    {
        $this->_propDict["submittedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the releasedBy
    *
    * @return IdentitySet The releasedBy
    */
    public function getReleasedBy()
    {
        if (array_key_exists("releasedBy", $this->_propDict)) {
            if (is_a($this->_propDict["releasedBy"], "Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["releasedBy"];
            } else {
                $this->_propDict["releasedBy"] = new IdentitySet($this->_propDict["releasedBy"]);
                return $this->_propDict["releasedBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the releasedBy
    *
    * @param IdentitySet $val The releasedBy
    *
    * @return EducationSubmission
    */
    public function setReleasedBy($val)
    {
        $this->_propDict["releasedBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the releasedDateTime
    *
    * @return \DateTime The releasedDateTime
    */
    public function getReleasedDateTime()
    {
        if (array_key_exists("releasedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["releasedDateTime"], "\DateTime")) {
                return $this->_propDict["releasedDateTime"];
            } else {
                $this->_propDict["releasedDateTime"] = new \DateTime($this->_propDict["releasedDateTime"]);
                return $this->_propDict["releasedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the releasedDateTime
    *
    * @param \DateTime $val The releasedDateTime
    *
    * @return EducationSubmission
    */
    public function setReleasedDateTime($val)
    {
        $this->_propDict["releasedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the grade
    *
    * @return EducationAssignmentGrade The grade
    */
    public function getGrade()
    {
        if (array_key_exists("grade", $this->_propDict)) {
            if (is_a($this->_propDict["grade"], "Microsoft\Graph\Model\EducationAssignmentGrade")) {
                return $this->_propDict["grade"];
            } else {
                $this->_propDict["grade"] = new EducationAssignmentGrade($this->_propDict["grade"]);
                return $this->_propDict["grade"];
            }
        }
        return null;
    }
    
    /**
    * Sets the grade
    *
    * @param EducationAssignmentGrade $val The grade
    *
    * @return EducationSubmission
    */
    public function setGrade($val)
    {
        $this->_propDict["grade"] = $val;
        return $this;
    }
    
    /**
    * Gets the feedback
    *
    * @return EducationFeedback The feedback
    */
    public function getFeedback()
    {
        if (array_key_exists("feedback", $this->_propDict)) {
            if (is_a($this->_propDict["feedback"], "Microsoft\Graph\Model\EducationFeedback")) {
                return $this->_propDict["feedback"];
            } else {
                $this->_propDict["feedback"] = new EducationFeedback($this->_propDict["feedback"]);
                return $this->_propDict["feedback"];
            }
        }
        return null;
    }
    
    /**
    * Sets the feedback
    *
    * @param EducationFeedback $val The feedback
    *
    * @return EducationSubmission
    */
    public function setFeedback($val)
    {
        $this->_propDict["feedback"] = $val;
        return $this;
    }
    
    /**
    * Gets the resourcesFolderUrl
    *
    * @return string The resourcesFolderUrl
    */
    public function getResourcesFolderUrl()
    {
        if (array_key_exists("resourcesFolderUrl", $this->_propDict)) {
            return $this->_propDict["resourcesFolderUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the resourcesFolderUrl
    *
    * @param string $val The resourcesFolderUrl
    *
    * @return EducationSubmission
    */
    public function setResourcesFolderUrl($val)
    {
        $this->_propDict["resourcesFolderUrl"] = $val;
        return $this;
    }
    

     /** 
     * Gets the resources
     *
     * @return array The resources
     */
    public function getResources()
    {
        if (array_key_exists("resources", $this->_propDict)) {
           return $this->_propDict["resources"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the resources
    *
    * @param EducationSubmissionResource $val The resources
    *
    * @return EducationSubmission
    */
    public function setResources($val)
    {
		$this->_propDict["resources"] = $val;
        return $this;
    }
    

     /** 
     * Gets the submittedResources
     *
     * @return array The submittedResources
     */
    public function getSubmittedResources()
    {
        if (array_key_exists("submittedResources", $this->_propDict)) {
           return $this->_propDict["submittedResources"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the submittedResources
    *
    * @param EducationSubmissionResource $val The submittedResources
    *
    * @return EducationSubmission
    */
    public function setSubmittedResources($val)
    {
		$this->_propDict["submittedResources"] = $val;
        return $this;
    }
    
}