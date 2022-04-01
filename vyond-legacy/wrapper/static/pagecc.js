function toAttrString(table) {
	return typeof (table) == 'object' ? new URLSearchParams(table).toString() : table.replace(/"/g, "\\\"");
}
function toParamString(table) {
	return Object.keys(table).map(key =>
		`<param name="${key}" value="${toAttrString(table[key])}">`
	).join(' ');
}
function toObjectString(attrs, params) {
	return `<object ${Object.keys(attrs).map(key =>
		`${key}="${attrs[key].replace(/"/g, "\\\"")}"`
	).join(' ')}>${toParamString(params)}</object>`;
}

module.exports = function (req, res, url) {
	if (req.method != 'GET') return;
	const query = url.query;

	// parse urls for the lvm
	const SWF_URL = process.env.SWF_URL.replace("127.0.0.1", "localhost");
	const STORE_URL = process.env.STORE_URL.replace("127.0.0.1", "localhost");
	const CLIENT_URL = process.env.CLIENT_URL.replace("127.0.0.1", "localhost");
	var attrs, params, title;
	switch (url.pathname) {
		case "/charactercreator/new_char/": {
			title = "Character Creator";
			attrs = {
				data: SWF_URL + "/cc.swf", // data: "cc.swf",
				type: "application/x-shockwave-flash", 
				id: "char_creator", 
				width: "960", 
				height: "600", 
				style:"display:block;margin-left:auto;margin-right:auto;",
			};
			params = {
				flashvars: {
					"original_asset_id": query["id"] || "",
					"themeId": "family",
					"ut": 60,
					"bs": "adam",
					"appCode": "go",
					"page": "",
					"siteId": "go",
					"m_mode": "school",
					"isLogin": "Y",
					"isEmbed": 1,
					"ctc": "go",
					"tlang": "en_US",
					"apiserver": "/",
					"storePath": STORE_URL + "/<store>",
					"clientThemePath": CLIENT_URL + "/<client_theme>"
				},
				allowScriptAccess: "always",
				movie: SWF_URL + "/cc.swf", // "http://localhost/cc.swf"
			};
			break;
		}

		default:
			return;
	}
	res.setHeader('Content-Type', 'text/html; charset=UTF-8');
	Object.assign(params.flashvars, query);
	res.end(`That will be coming pretty soon.`);
	return true;
}