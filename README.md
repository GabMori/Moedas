-  A aplicação permite ao usuário converter valores de uma moeda para outra, com base em uma taxa de câmbio inserida manualmente. 
O usuário seleciona as moedas de origem e destino (opção de moedas baseada nas mais convertidas segundo o Google), insere as quantias que 
deseja converter (pode informar mais de uma quantia por vez separadas por vírgulas) e a taxa de câmbio. A conversão é então realizada e exibida na interface

-  As funções calcularConversao e aplicarConversao são puras, ou seja, não possuem efeitos colaterais e sempre retornam o mesmo valor para as mesmas entradas.

-  A função aplicarConversao utiliza array_map, uma função de ordem superior que permite aplicar a conversão em uma lista de valores de maneira funcional.
-  As variáveis e dados são tratados de forma imutável. Não há alterações diretas em dados ou variáveis fora das funções. Os dados de entrada são passados
  como parâmetros, e os resultados são retornados sem modificar o estado externo.

  Exemplo de entrada:

  Moeda de Origem: USD
  Moeda de Destino: EUR
  Quantias: 10, 50, 100
  Taxa de Câmbio: 0.85
  
  Saída deve ser:
  
  10 USD -> 8.50 EUR
  50 USD -> 42.50 EUR
  100 USD -> 85.00 EUR
