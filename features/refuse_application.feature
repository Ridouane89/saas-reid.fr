Feature: Refuse an application
  Scenario: As a recruiter I want to refuse that I received so that I can explain to the job seeker that his application was unsuccessful
    Given I want to refuse an application
    When I send a the reason of refusal
    Then the job seeker is aware of our decision

