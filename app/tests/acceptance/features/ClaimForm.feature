Feature: Claim Form
    In order to track my visitors
    As the site owner
    I want to give users the ability to sign the claim form

Scenario: User fills out claim form
    Given I am on homepage
    And I fill in "name" with "Azat"
    And I fill in "email" with "testcpp@yandex.ru"
    And I fill in "phone" with "+7(960) 365-63-83"
    When I press "header_form_submit"
    Then I should see "Ваша заявка успешна отправлена"
    Then last claim message name is "Azat"