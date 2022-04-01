/***
 * sound save route
 */
const sound = require("../asset/main");
const loadPost = require("../request/post_body");

module.exports = function (req, res, url) {
	if (req.method != "POST" || url.path != "/goapi/saveSound/") return;
	loadPost(req, res).then(data => {
		var bytes = Buffer.from(data.bytes, "base64");
		sound.save(bytes).then(nId => res.end("0" + nId)).catch(err => {
			if (process.env.NODE_ENV == "dev") throw err;
			console.error("Error saving sound: " + err)
			res.end("1")
		});
	});
	return true;
}
