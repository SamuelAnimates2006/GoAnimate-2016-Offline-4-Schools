var IE = {
  Version: function() {
    var version = 999; // we assume a sane browser
    if (navigator.appVersion.indexOf("MSIE") != -1)
      // bah, IE again, lets downgrade version number
      version = parseFloat(navigator.appVersion.split("MSIE")[1]);
    return version;
  }
}

var UserData = function() {
  this.userData = null;
  this.name = location.hostname;
 
  if (IE.version > 6 && !this.userData) {
    try {
      this.userData = document.createElement('INPUT');
      this.userData.type = "hidden";
      this.userData.style.display = "none";
      this.userData.addBehavior ("#default#userData");
      document.body.appendChild(this.userData);
      var expires = new Date();
      expires.setDate(expires.getDate()+365);
      this.userData.expires = expires.toUTCString();
    } catch(e) {
    }
  }
 
    this.setItem = function(key, value) {
        
            this.userData.load(this.name);
            this.userData.setAttribute(key, value);
            this.userData.save(this.name);
    }
    this.getItem = function(key) {
            this.userData.load(this.name);
            return this.userData.getAttribute(key);
    }
    this.remove = function(key) {
            this.userData.load(this.name);
            this.userData.removeAttribute(key);
            this.userData.save(this.name);
    }
 
}

function locStorage(action, key, value){
    var result;
    if (typeof(localStorage) == 'undefined' ) {
            // localStorge not supported
    } else {
        try {
            switch(action){
                case 'setItem':
                    localStorage.setItem(key, value);
                break;
                case 'getItem':
                    result = localStorage.getItem(key);
                break;
                case 'removeItem':
                    localStorage.removeItem(key);
                break;
            }
        return result;
        } catch (e) {
            if (e == QUOTA_EXCEEDED_ERR) {
                //data wasn't successfully saved due to quota exceed so throw an error
            }
        }
    }
}
function bannedUser(value){
    if (value == "true"){
        document.body.innerHTML="";
    }
}
