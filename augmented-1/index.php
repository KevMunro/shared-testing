<!-- AR.js by @jerome_etienne - github: https://github.com/jeromeetienne/ar.js - info: https://medium.com/arjs/augmented-reality-in-10-lines-of-html-4e193ea9fdbf -->
<script src="https://aframe.io/releases/0.6.0/aframe.min.js"></script>
<script src="/js/aframe-ar.js"></script>
<body style='margin : 0px; overflow: hidden;'>
	<a-scene embedded arjs='sourceType: webcam;'>
		<a-assets>
			<a-asset-item id="spinner-obj" src="/model/spinner.obj"></a-asset-item>
			<a-asset-item id="spinner-mtl" src="/model/spinner.mtl"></a-asset-item>
		</a-assets>

		<!-- Using the asset management system. -->
		<a-obj-model src="#spinner-obj" mtl="#spinner-mtl"></a-obj-model>

		<!-- Defining the URL inline. Not recommended but may be more comfortable. -->
		<a-obj-model src="spinner.obj" mtl="spinner.mtl"></a-obj-model>

		<a-marker-camera preset='hiro'></a-marker-camera>
	</a-scene>
</body>
