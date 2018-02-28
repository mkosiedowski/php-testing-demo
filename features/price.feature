Feature: Price Comparison
  In order to compare prices
  As a customer
  I need to break the currency barrier

  Scenario: Compare EUR and PLN
    Given I use nbp.pl comparator
    When I compare "100EUR" and "100PLN"
    Then It should return some result
