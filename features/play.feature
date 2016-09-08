Feature: Play
  In order to play the bee game
  As a web user
  I need to be able to start the game

  Scenario: See the bees
    Given I am on "/"
    Then I should see "Queen"
    And I should see "Worker"
    And I should see "Drone"
    And I should see "Hit"

  Scenario: Play the game
    Given I am on "/"
    Then I press "Hit"
    And I should see "Hit"