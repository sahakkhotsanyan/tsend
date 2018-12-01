## What Is tsend
Tool to send command STDOUT to Telegram User from configured Telegram Bot
## How To
### ArchLinux
<code>cd /tmp</code><br>
<code>git clone https://github.com/sahakkhotsanyan/tsend.git</code><br>
<code>cd tsend</code><br>
<code>makepkg -si</code><br>
### Other
<code>cd /tmp</code><br>
<code>git clone https://github.com/sahakkhotsanyan/tsend.git</code><br>
<code>cd tsend</code><br>
<code>sudo cp ./pkg/tsend /bin/</code><br>
<code>sudo chmod +x /bin/tsend</code><br>
### Usage

###### Configuration
<code>tsend -u</code><br>
###### Examples
Example1: <code> ls -la | tsend </code><br>
Example2: <code> ls -la | tsend -i someid </code>
