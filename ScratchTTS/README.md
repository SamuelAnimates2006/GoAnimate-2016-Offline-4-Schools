# ScratchTTS

A PHP wrapper of the unofficial Scratch.mit.edu TTS API. Complete with an HTML/JS/CSS UI.

## How to use

If you want to use ScratchTTS, there are 2 ways to do it.

1. Navigate to [the site on 000webhost](https://action-ouranimate.herokuapp.com/ScratchTTS/) to view an online, pre-configured version.

2. If it doesn't work for you, install [WampServer](http://www.wampserver.com/en/) then clone/download this project. When you're done, unzip the folder, copy the path where you unzipped the folder, and follow these steps:


* Navigate to `localhost`
* Click on "Add a Virtual Host"
* Name the virtual space whatever you want, preferrably "scratchtts".
* Go to where you extracted the folder, copy the path to it's location and paste it into the complete absolute path of the Virtual Host folder.
* Click the "Start the creation of the Virtual Host" button
* When it's done, navigate to the WampServer tray icon, right click, go into "Tools" and click "Restart DNS".
* Wait 5-10 seconds and make sure a command prompt window pops up for a split-second.
* After all that, navigate to whatever you named the virtual host in your browser. E.g. I named mine `scratchtts`.

Keep in mind that no matter which method you use, it requires an internet connection at all times because the PHP sends requests to the unofficial Scratch.mit.edu TTS API itself.

Unfortunately, you can't get it to say swear words due to the filters on the original site. You can use intentional misspellings to try to get past this problem though.

### Licenses

This project is licensed under GNU General Public License v3.0 - see the [LICENSE.md](LICENSE.md) file for details

### Acknowledgements

* Credit to the Massachusetts Institute of Technology for Scratch, their official cat mascot and their unofficial TTS API.
* Credit to Amazon Polly for the voices in Scratch's unofficial TTS API.

### Disclaimer

Copyright Disclaimer Under Section 107 of the Copyright Act 1976, allowance is made for "fair use" for purposes such as criticism, comment, news reporting, teaching, scholarship, and research. Fair use is a use permitted by copyright statute that might otherwise be infringing. Non-profit, educational or personal use tips the balance in favor of fair use.

I do not own the rights to any copyrighted material used in this project. This project is STRICTLY for educational and experimental purposes only, and therefore protects it under fair use. If anyone over at MIT wants me to take it down, I will be happy to do so.
