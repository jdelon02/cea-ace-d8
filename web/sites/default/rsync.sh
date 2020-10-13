export ENV=live
# Usually dev, test, or live
export SITE=ed3bf0d4-a94f-4d73-abbc-0c0f023062f6
# Site UUID from dashboard URL: https://dashboard.pantheon.io/sites/[uuid]

# To Upload/Import
rsync -rLvz --size-only --ipv4 --progress -e 'ssh -p 2222' ./files/. --temp-dir=~/tmp/ $ENV.$SITE@appserver.$ENV.$SITE.drush.in:files/
