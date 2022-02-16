        ////
	//// This JS contains important Video Studio stuff
	////
	
	///
	/// Variables
	///
	var previewPlayerTempData = "";
	const fu = document.getElementById('fileupload'),
		sub = document.getElementById('submit');

	///
	/// Previewer
	///
	function initPreviewPlayer(dataXmlStr, startFrame, containsChapter, themeList) {
		// New variable to be used by loadPreviewer()
		movieDataXmlStr = dataXmlStr;
		// Movie XML
		filmXmlStr = dataXmlStr.split("<filmxml>")[1].split("</filmxml>")[0];
		// Show preview popup
		document.getElementById("preview_popup_container").style.display = "block";
		// Load the Video Previewer
		loadPreviewer();
	}
	function loadPreviewer() {
		// I think this is in case of an error??
		if (movieDataXmlStr === null) {
			return;
		}
		// I don't know
		savePreviewData(movieDataXmlStr);
	}
	function savePreviewData(a) {
		// Set temp data variable
		previewPlayerTempData = a
	}
	function retrievePreviewPlayerData() {
		// Store in separate variable
		var recentPreviewPlayerTempData = previewPlayerTempData;
		// Clear original variable
		previewPlayerTempData = "";
		// Return recent temp data
		return recentPreviewPlayerTempData;
	}

	///
	/// Importing
	///
	// Show upload window
	function showImporter() {
		document.getElementById("import_popup_container").style.display = "block";
	};

	///
	/// Other stuff
	///
	// Redirect to Video Browser on Video Studio exit
	function exitStudio() {
		window.location = "/videos/browse.php";
	}
	// Hide interactive tutorial
	interactiveTutorial = {
		neverDisplay: function() {
			return true
		}
	};
	// Hide Video Previewer popup
	function hidePreviewer() {
		document.getElementById("preview_popup_container").style.display = "none";
	}
        // Save your video with the preview window
        function saveVideo() {
		document.getElementById("preview_popup_container").style.display = "none";
		document.getElementById("Studio").onExternalPreviewPlayerPublish();
	}
	// Hide Asset Importer popup
	function hideImporter() {
		document.getElementById("import_popup_container").style.display = "none";
	}
