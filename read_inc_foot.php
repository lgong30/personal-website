    <script type="text/javascript" src="assets/js/bib-list.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
        	$('table').each(function(index,item){
                alert("#bibtex" + index + "," + "pubTable" + index);
			    bibtexify("#bibtex" + index , "pubTable" + index);
			});
          // bibtexify("#bibtex", "pubTable", {'tweet': 'vkaravir'});
		  //bibtexify("assets/files/long_gong_pre.bib", "pubTable", {'tweet': 'vkaravir'});
        });
    </script>