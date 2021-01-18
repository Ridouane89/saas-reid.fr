Feature: Register
  Scenario: As a job seeker I want to register so that I look for new job
    Given I need to register to look for a new job
    When I fill the registration form
    Then I can log in with my new account

  Scenario: As a Recruiter I want to register so that I recruit a new employees
    Given I need to register to recruit a new employees
    When I fill the registration form
    Then I can log in with my new account
