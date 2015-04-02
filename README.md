# Robobu's Theme!
##Tools
Wordpress, Git, Bundler, Capistrono, Circle Ci

##How does it work?
Our wordpress uses "multisite" mode and have two theme directories under /wp-content/themes/.
Both of them are the same git repository but the theme in Production uses the "master" branch and staging environment uses "staging" branch.

First, you clone this repo "git clone {this_repo.git}"
and create new branch that you will work on "git branch whatever-you-like-to-name" then "git checktout whatever-you-named-it".
.... work, work, work....
"git add your-work"
"git commit -m 'your-message' "
"git push origin whatever-you-named-it"

After you push your branch to the remote git, you can .... oh, we don't have development environment... 

#TBA



