Utilitários



Comandos do Git
============

_Uma lista dos meus comandos Git comumente usados_

* Se você estiver interessado em meus aliases do Git, dê uma olhada no meu `.bash_profile`, encontrado aqui: https://github.com/joshnh/bash_profile/blob/master/.bash_profile*

-

### Obtendo e Criando Projetos

| Comando | Descrição |
| ------- | ----------- |
| `git init` | Inicialize um repositório Git local |
| `git clone ssh: //git@github.com/ [nome do usuário] / [nome do repositório] .git` | Crie uma cópia local de um repositório remoto |

### Snapshot básico

| Comando | Descrição |
| ------- | ----------- |
| `git status` | Verifique o status |
| `git add [nome-arquivo.txt]` | Adicione um arquivo à área de preparação |
| `git add -A` | Adicione todos os arquivos novos e alterados à área de preparação |
| `git commit -m" [mensagem de commit] "` ​​| Confirmar alterações |
| `git rm -r [nome do arquivo.txt]` | Remover um arquivo (ou pasta) |

### Ramificação e fusão

| Comando | Descrição |
| ------- | ----------- |
| `git branch` | Listar ramificações (o asterisco indica a ramificação atual) |
| `git branch -a` | Listar todas as ramificações (locais e remotas) |
| `git branch [nome da ramificação]` | Crie uma nova ramificação |
| `git branch -d [nome da ramificação]` | Excluir uma ramificação |
| `git push origin --delete [nome da ramificação]` | Excluir uma ramificação remota |
| `git checkout -b [nome da ramificação]` | Crie um novo ramo e mude para ele |
| `git checkout -b [nome da ramificação] origin / [nome da ramificação]` | Clone um ramificação remoto e mude para ele |
| `git checkout [nome da ramificação]` | Mudar para uma ramificação |
| `git checkout -` | Mudar para a filial última check-out |
| `git checkout - [nome-arquivo.txt]` | Descartar as alterações em um arquivo |
| `git merge [nome da ramificação]` | Mesclar uma ramificação na ramificação ativa |
| `git merge [ramificação de origem] [ramificação de destino]` | Mesclar uma ramificação em uma ramificação de destino |
| `git stash` | Stash muda em um diretório de trabalho sujo |
| `git stash clear` | Remova todas as entradas escondidas |

### Compartilhando e atualizando projetos

| Comando | Descrição |
| ------- | ----------- |
| `git push origin [nome da ramificação]` | Empurre uma ramificação para o seu repositório remoto |
| `git push -u origin [nome da ramificação]` | Empurre as alterações para o repositório remoto (e lembre-se da ramificação) |
| `git push` | Empurre as alterações para o repositório remoto (ramificação lembrado) |
| `git push origin --delete [nome da ramificação]` | Excluir uma ramificação remota |
| `git pull` | Atualize o repositório local para o mais recente commit |
| `git pull origin [nome da ramificação]` | Puxe as mudanças do repositório remoto |
| `git remote add origin ssh: //git@github.com/ [nome do usuário] / [nome do repositório] .git` | Adicione um repositório remoto |
| `git remote set-url origin ssh: //git@github.com/ [username] / [nome do repositório] .git` | Definir uma ramificação de origem do repositório para SSH |

### Inspeção e Comparação

| Comando | Descrição |
| ------- | ----------- |
| `git log` | Visualizar alterações |
| `git log --summary` | Visualizar as alterações (detalhadas) |
| `git diff [ramificação de origem] [ramificação de destino]` | Visualizar as alterações antes de mesclar |