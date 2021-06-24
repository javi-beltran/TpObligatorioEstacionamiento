<?php
	composer require spipu/html2pdf;

		$mpdf = new mPDF();
		$mpdf = writeHTML('<div>aklsjlda</div>');
		$mpdf=Output('aaa.pdf','I');
?>