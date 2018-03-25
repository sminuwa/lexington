
<!-- The Modal -->
  <div class="modal  animated zoomIn" id="read_content<?php echo $sno; ?>" data-backdrop="static" style="max-height:100%;">
    <div class="modal-dialog modal-lg" style="max-width:100%;margin: 0px; ">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title"><?php echo $content_name; ?></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body" id="imageh<?php echo $content_id; ?>" >
          <div class="col-lg-12">
            <!-- <div class="element-wrapper" >
              <div class="element-box">
                
              </div>
            </div> -->
            <!-- <iframe src='https://view.officeapps.live.com/op/embed.aspx?src=https://www.stmarys-belfast.ac.uk/academic/compservices/tenders/network%20upgrade%20ITT.docx' width='100%' height='600px' frameborder='0'>This is an embedded <a target='_blank' href='http://office.com'>Microsoft Office</a> document, powered by <a target='_blank' href='http://office.com/webapps'>Office Online</a>.</iframe> -->
            
            <iframe src="http://docs.google.com/gview?url=https://www.stmarys-belfast.ac.uk/academic/compservices/tenders/network%20upgrade%20ITT.docx&embedded=true" width="100%" id="imageh1<?php echo $content_id; ?>"></iframe>

          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary">Download</button>
        </div>
        
      </div>
    </div>
  </div>

  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      var h2 = screen.height - 242;
      $("#imageh<?php echo $content_id; ?>").css({'max-height': h2  + 'px','overflow':'auto','min-height': h2  + 'px',});
      $("#imageh1<?php echo $content_id; ?>").css({'max-height': h2  + 'px','overflow':'auto','min-height': h2  + 'px',});


      $("#read<?php echo $content_id; ?>").click(function(){
        $("#read_content<?php echo $sno; ?>").modal("show");
      })

      

    })

    </script>
  </script>