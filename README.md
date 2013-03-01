# Exemplo de internacionalização (i18n) com CakePHP

Aqui, utilizei a internacionalização que o CakePHP proporciona. Vale lembrar que é só um exemplo, pois uma internacionalização de fato deve seguir algumas ISO específicas para nomenclatura de pastas, etc, etc.

## Gerando os arquivos _.pot_

Para gerar os arquivos, utilizamos o comando:

<code>
	cake i18n extract
</code>

Ele vai gerar os arquivos _.pot_ da aplicação.

<string>Atenção:</strong> Para gerar um arquivo separado para as validações do Model, pasta colocar o nome do arquivo no atributo <em>$validationDomain</em> do Model ou no AppModel.

## Traduzindo

Para traduzir, utilizei o [poedit](http://www.poedit.net/). Para instalar no Ubuntu, faça assim:

<code>
	apt-get install poedit
</code>