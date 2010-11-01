rsync -avz --exclude '.git' ~anishn/s4-website/ soundfigure.greatamerica:/var/www/s4
rsync -avz --exclude '.git' ~anishn/s4-website/css ~anishn/s4-website/images s4_s4@ssh.phx.nearlyfreespeech.net:/home/public/
rsync -avz --exclude '.git' ~anishn/s4-website/pmwiki.tmpl s4_s4wiki@ssh.phx.nearlyfreespeech.net:/home/public/pmwiki/pub/skins/pmwiki
rsync -avz --exclude '.git' ~anishn/s4-website/pmwiki.htaccess s4_s4wiki@ssh.phx.nearlyfreespeech.net:/home/public/.htaccess
