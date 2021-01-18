Feature: send application
  Scenario: As a recruiter I want to delete an existing offer so that job seeker  cannot apply for the job
    Given I want to send my application to a job
    When I write and send my application
    Then my application is on pending and recruiter can process it

