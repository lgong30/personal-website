	<!-- +++++ Reading Section +++++ -->

	<div class="container pt">
		<div class="row mt">
			<div class="col-lg-12">
		    <table id="pubTable0" class="display"></table>
            <pre id="bibtex0" style="display:none;"> 
               <?php
				// get contents of a file into a string
				$filename = "assets/files/switching.bib";
				$handle = fopen($filename, "r");
				$contents = fread($handle, filesize($filename));
				fclose($handle);
				echo $contents;
			   ?>
            </pre>
			</div>
			<div class="col-lg-12">
		    <table id="pubTable1" class="display"></table>
            <pre id="bibtex1" style="display:none;"> 
               <?php
				// get contents of a file into a string
				$filename = "assets/files/counters.bib";
				$handle = fopen($filename, "r");
				$contents = fread($handle, filesize($filename));
				fclose($handle);
				echo $contents;
			   ?>
            </pre>
			</div>
		</div>
	</div>