<?php

      ob_start();
      echo $this->renderPartial('_contentPrintTransfer');
      $content = ob_get_clean();
   
      Yii::import('application.extensions.html2pdf.HTML2PDF');
      try
      {
          $html2pdf = new HTML2PDF('P', 'A4', 'es');
  //      $html2pdf->setModeDebug();
          $html2pdf->setDefaultFont('Arial');
          $html2pdf->writeHTML($content,false);
          $html2pdf->Output("pdfdemoTransfer.pdf");
           
      }
      catch(HTML2PDF_exception $e) {
          echo $e;
          exit;
      }
      

        ?>