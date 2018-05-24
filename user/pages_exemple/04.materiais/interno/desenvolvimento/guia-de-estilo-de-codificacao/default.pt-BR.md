---
title: 'Guia de Estilo de Codificação'
published: true
taxonomy:
    categoria:
        - Interno
        - Processos
        - Desenvolvimento
access:
    site.colaborador: '1'
anchors:
    active: true
menuright: true
tagtitle: h2
---

===

Este documento tem por finalidade normatizar e nortear o padrão de codificação das aplicações desenvolvidas utilizando-se Delphi.

Os padrões aqui documentados seguem em sua maioria diretrizes de formação utilizadas pela Embarcadero na implementação do próprio Delphi, sendo possível consulta no seguinte [link](https://https://edn.embarcadero.com/article/10280) .

A intenção desta padronização é tornar todo o conteúdo produzido durante o desenvolvimento de um software de fácil leitura e entendimento para todos os colaboradores que nele venham a trabalhar.

A padronização das técnicas e da codificação tornarão o código mais legível e consistente possibilitando uma melhor manutenibilidade e conseguente qualidade.

Para todos os demais assuntos aqui não citados será adotado o guia de estilo da Embarcadero.

A seguir será apresentado o _guideline_ a ser utilizado para organização dos fontes e para sua escrita.

## Arquivos Fontes

Os arquivos fontes aqui referenciados correspondem a todos os arquivos utilizados pelo projeto direta ou indiretamente.

## Estrutura de Diretórios dos Projetos
Todos os projetos desenvolvidos utilizando-se Delphi como tecnologia/linguagem deverão seguir a seguinte estrutura organizacional:

![Logo da Eagle Tecnologia](hd.eagletecnologia.com/images/logo/prin_png_256.png)

| Diretório / Arquivo | Função |
| ------------------- | ------ |
| Projeto/src/ | Armazenar todo o código escrito em Delphi |
| Projeto/tests/ | Armazenar todos os testes escritos para o projeto |
| Projeto/packages/ | Armazenar os arquivos de projeto para as versões do Delphi |
| Projeto/resource/ | Arquivos de recursos utilizados pelo projeto |
| Projeto/libs/ | Bibliotecas de terceiros |
| Projeot/docs/ | Documentação produzida no projeto |
| readme.md | Arquivo de detalhamento do projeto exibido no Gitlab |
| .gitignore | Arquivo de configuração do git |

Em projetos de grande porte o sistema poderá ser organizado em módulos o que implicará na organização dos fontes também em módulos. Desta forma, o diretório de código fonte em sua raiz terá subdiretórios para cada modulo.

A organização dos testes deve seguir a mesma estrutura da src.

![Logo da Eagle Tecnologia](hd.eagletecnologia.com/images/logo/prin_png_256.png)

## Convensão de Nomeclaturas
### Units
A nomeação das units deverá utilizar uma composição de informações a fim de compor um namespace para cada unit.
Use PascalCase para nomear as Units. Use uma estrutura clara e bem definida como no exemplo.

```Delphi
unit Eagle.ERP.Model.Entity.ContaCorrente;
```

No exemplo assim podemos ver que o nome do arquivo da unit (sua _namespace_) é composta pelo nome da empresa (Eagle), seguido do nome do projeto, camada de dados (_Model_), subcamada de dados (_Entity_) e finalmente o tipo de dado.

Com base nesta _namespace_ podemos extrair algumas informações a cerca do contéudo e da localização da unit no projeto.
1. Esta unit armazena a declaração de uma interface
2. A unit está localizada no diretório ``` src/model/entity ```
3. O nome da interface é IContaCorrente

### Classes/Interfaces

### Fields

### Variáveis

### Métodos
Os nomes dos métodos (_procedures_ e _functions_) devem ser escritos utilizando o padrão [PascalCase](https://en.wikipedia.org/wiki/PascalCase).
### Arrays
Os nomes para tipos de matrizes (array) devem ser significativos para o propósito da matriz. O nome do tipo deve ser prefixado com um caractere T. Se um ponteiro para o tipo de matriz é declarado, deve ser prefixado com o caractere P e declarado imediatamente antes da declaração de tipo. Exemplo:

```Delphi
type
  PCycleArray = ^TCycleArray;
  TCycleArray = array[1..100] of Integer;
```

### Records
Um tipo de registro deve receber um nome significativo para sua finalidade. A declaração de tipo deve ser prefixada com o caractere T. Se um ponteiro para o tipo de registro é declarado, ele deve ser prefixado com o caractere P e declarado imediatamente antes da declaração de tipo.
A declaração de tipo para cada elemento pode ser opcionalmente alinhada em uma coluna à direita. Exemplo:

```Delphi
type
  PEmployee = ^TEmployee;
  TEmployee = record
    Name: string;
    Rate: Double;
  end;
```

### Enum
Os nomes para tipos enumerados devem ser significativos para o propósito da enumeração. O nome do tipo deve ser prefixado com o caractere T para anotá-lo como uma declaração de tipo. A lista de identificadores do tipo enumerado deve conter uma minúscula de dois a três
Prefixo de caractere que o relaciona com o nome do tipo enumerado original. Exemplo:

```Delphi
TSongType = (stRock, stClassical, stCountry);
```

## Códificação
A seguir serão detalhados todos os detalhes referentes à codificação dos sistemas implementados pela Eagle Tecnologia. As regras aqui detalhadas deverão ser seguidas de forma rigorosa.

Os assuntos não tratados neste documento e nem no guia de estilo da Embarcadero deverão ser discutidos com a equipe e por fim documentados quando necessário.

### Linhas em Branco
O uso de linhas em branco é fortemente encorajado durante a codificação por promover legibilidade ao código. A seguir é listado situações e momentos onde se deve utilizar linhas em branco:
* Antes de abertura e fechamento de blocos **_begin..end_**
* Para separar ideias, agrupar conceitos relacionados, separar conceitos não relacionados
* Para separar a declaração de variáveis de seu uso
* Para quebrar cadeias longas de caracteres ou encadeamentos longos de chamadas de métodos ou propriedades.

### Espaços em Branco
### Indentação
O recuo será de dois espaços por nível. Não utilize caracteres de tabulação em arquivos de código fonte. A razão para isso é porque os caracteres de tabulação são expandidos para diferentes larguras com diferentes configurações de usuários.

### Continuação de linhas
### Comentários
### Statements
#### if Statements
#### case Statements
#### while Statements
#### for Statements
#### repeat statements
#### with Statements
O uso de with é considerado uma má prática de desenvolvimento. Seu uso embora reduza a quantidade de código a ser escrito cria dificuldade no debug, esconde problemas silenciosos e futuros.

### Classes
Os nomes das classes deverão serguir o padrão adotado començando com a letra T para anotá-lo como um tipo.

```Delphi
type
  TCustomer = class(TInterfacedObject, ICustomer)
```
Instancias de classes deverão ser referenciadas por variáveis dos tipos da interfaces implementadas pelas classes.

```Delphi
var
  Customer : ICustomer;
begin

  Custumer := TCustomer.Create;
```
#### Fields

Todos os _fields_ devem ser privados. Os _fields_ acessíveis fora do escopo da classe serão acessíveis através do uso de uma propriedade (_properties_).

Exemplo:

```Delphi
TCustomer = class(TInterfacedObject, ICustomer)
private
  FField1: Integer;
  FField2: Integer;
end;
```
#### Métodos / Funções
Os nomes de métodos seguem as mesmas convenções de nomenclatura, conforme descrito para _procedures_ e _functions_ neste documento.

Os métodos deverão ser declarados na ordem do mais genérico/abstrato para o mais específico.

Use métodos virtuais para em um método que poderá ser substituído pelas classes descendentes. 

Não use métodos abstratos em classes das quais instâncias serão criadas. Use abstract apenas em classes básicas que nunca serão instânciadas.

Cada método deve possuir no máximo 30 linhas (desde o cabeçalho até o último end do método incluindo as linhas em branco).

Cada método deve ter a complexidade máxima igual a 10.

O uso de submetodos (procedures e funções dentro de procedures e funções) deve ser evitado ao máximo.

#### Propriedades

### Manipulação de Exceção
O tratamento de exceção deve ser usado abundantemente tanto para correção de erros quanto para proteção de recursos. Isto significa que em todos os casos em que os recursos são alocados deve ser usado para garantir uma adequada desalocação do recurso. A exceção a isso é quando os recuros são alocados e referenciados por interfaces ondem o controle de liberação de memoria é realizado pelo próprio compilador.

#### O uso de try..finally
Sempre que possível, cada alocação de memoria deverá está tratada com um try..finally. Por exemplo, o código a seguir pode levar a possíveis bugs:

```Delphi
SomeClass1 := TSomeClass.Create;
SomeClass2 := TSomeClass.Create;

try
  { do some code }
finally
  SomeClass1.Free;
  SomeClass2.Free;
end;
```
Uma abordagem mais segura da alocação acima seria:

```Delphi
SomeClass1 := TSomeClass.Create;

try
  SomeClass2 := TSomeClass.Create;

  try
    { do some code }
  finally
    SomeClass2.Free;
  end;
  
finally
  SomeClass1.Free;
end;
```

É de responsábilidade do desenvolvedor a remoção de todo e qualquer fazamento de memória (_Memory leak_) que possa a ser gerado devido a má gestão dos recursos alocados.

Todo projeto deve ter em seu arquivo de inicialização de aplicação o seguinte código para que a detecção e report de fazamentos de memória:

```Delphi
begin
  {$IFDEF DEBUG}
  ReportMemoryLeaksOnShutdown := True;
  {$ENDIF}
```

#### O uso de try..except

Use try..except somente quando quiser executar alguma tarefa quando uma exceção é gerada. Em geral, você não deve usar try..except para simplesmente mostre uma mensagem de erro na tela porque isso será feito automaticamente no contexto de um aplicativo pelo objeto Application ou pelo framework em uso. Se você quiser invocar o tratamento de exceção padrão depois de ter executado alguma tarefa em na cláusula except, use raise para re-lançar a exceção para o próximo manipulador.

Não capture exceções utilizando super-classes (Exception e etc) a não ser que tenha total condição de realizar o tratamento da exceção naquele momento. Sempre qualifique a captura das exceções com o tipo correto do erro.

Não esconda a causa real da exceção com o lançamento de exceções genericas. Sempre levante exceções tipificas. Caso o tipo não exista declare-o na unit adequada.

Exemplo de má prática:

```Delphi
try

  tblCustomer.Active := True;
  tblCustomerOrders.Active := True;
  tblLineItems.Active := True;

except
  raise Exception.Create('Could not open customer tables');
end;
```

Solução mais adequada:

```Delphi
try

  tblCustomer.Active := True;
  tblCustomerOrders.Active := True;
  tblLineItems.Active := True;

except
  raise CustomerTableException.Create('Could not open customer tables');
end;
```

Nunca utilize try..except silencioso, o seu uso pode ocultar erros que dificilmente serão percebidos.

### Abertura e fechamento de bloco (begin ... end)
A abertura e fechamento de blocos devem ser utilizadas em linhas próprias não pode ser utilizado em conjunto com outras instruções.
Os exemplos a seguir ilustram o uso incorreto e correto:

```Delphi
for I := 0 to 10 do begin // incorreto, begin não pode aparecer na mesma linha da instrução for

for I := 0 to 10 do // correto, begin aparece isolado em sua própria linha
begin
```

A utilização de abertura e fechamento de bloco poderam ser suprimidas sempre que o bloco possuir apenas uma instrução como no exemplo a seguir.

```Delphi
if AValue > 0 then
  Result := 'ok'
else
  Result := 'error'
  
for I := 0 to 10 do
  AList.Item[I] := 0
 
```

### O uso de parênteses
Nunca inclua espaço em branco entre a abertura de parêntese o próximo caracter. Da mesma forma, nunca haverá espaço em branco entre o fechamento de umparêntese fechado e o caracter anterior. O exemplo a seguir ilustra o espaçamento incorreto e correto em relação ao uso de parênteses:

```Delphi
CallProc( AParameter ); // incorreto
CallProc(AParameter);   // correto
```
Nunca inclua parênteses desnecessarios em uma declaração. Parênteses só devem ser utilizados quando necessário para alcançar o objetivo de clareza no código fonte. Os exemplos a seguir ilustram o uso incorreto e correto:

```Delphi
if (I = 42) then // incorreto

if (I = 42) or (J = 42) then //correto
```
### Warning e Hints
Evite a geração de Warning e Hints. Fique atento para as mensagens que o próprio copilador informa, apesar de não bloquearem a geração da aplicação podem gerar erros silenciosos.

### Números Mágicos