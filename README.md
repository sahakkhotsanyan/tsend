##What Is tsend
tsend is a tool to send command output to Telegram User from selected Telegram Bot
##How To
###ArchLinux
cd /tmp<br>
git clone https://github.com/sahakkhotsanyan/tsend.git<br>
cd tsend<br>
makepkg -si<br>
###Other
cd /tmp<br>
git clone https://github.com/sahakkhotsanyan/tsend.git<br>
cd tsend<br>
sudo cp ./pkg/tsend /bin/<br>
sudo chmod +x /bin/tsend<br>
##Usage
###Configuration
<code>
	tsend -u
</code>
###Examples
Example1: ls -la | tsend
Example2: ls -la | tsend -i someid
