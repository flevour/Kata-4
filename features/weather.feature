Feature: Solve kata 4
  Per diventare un programmatore migliore
  Faccio i kata
  Per esempio il 4

# Background:
#   Given there is agent A
#   And there is agent B

  Scenario Outline: Script execution
    Given there is a "weather-prova.dat" file with min temp <min> and max temp <max>
    When I execute "php weather.php weather-prova.dat"
    Then I should see "Result: day 1 (min <min>, max <max>)"
    Examples:
      | min | max |
      | 4   | 7   |
      | 4   | 8   |

  Scenario Outline: Parser testing
    Given there is a "weather-prova.dat" file with min temp <min> and max temp <max>
    When I pass "weather-prova.dat" to a class Parser
    Then I should get an array with elements "1", "<min>", "<max>"
    Examples:
      | min | max |
      | 4   | 7   |
      | 4   | 8   |


#  [Scenario Outline|Scenario Template]: Erasing other agents' memory
#    Given there is agent <agent1>
#    And there is agent <agent2>
#    When I erase agent <agent2>'s memory
#    Then there should be agent <agent1>
#    But there should not be agent <agent2>

#    [Examples|Scenarios]:
#      | agent1 | agent2 |
#      | D      | M      |



# mi creo un file con dentro una riga sola che ha min = 4 e max = 7
# se eseguo lo script con quel file
# e quando stampo il risultato deve darmi balb la 4, 7


# mi creo un file con dentro una riga sola che ha min = 8 e max = 9
# se eseguo lo script con quel file
# quando stampo il risultato deve darmi balb la 8, 9