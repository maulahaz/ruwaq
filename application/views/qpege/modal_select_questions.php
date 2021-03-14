<div class="modal fade" id="mod_select_question">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Default Modal</h4>
      </div>
      <div class="modal-body">
        <table id="tbl_question_list_ckbx" cellpadding="0" cellspacing="0" border="0" width="100%" class="table table-striped table-bordered table-sm">
          <thead>
              <tr>
                  <th>No.</th>
                  <th>Level</th>
                  <th>Questions</th>
                  <th>Points</th>
                  <th>Checks</th>
              </tr>
          </thead>
          <tbody>
              <?php $sn = 1; ?>
              <?php if(isset($dtQuestions) && $dtQuestions->num_rows() > 0 ) : ?>
              <?php foreach ($dtQuestions->result_array() as $row) : ?>
              <tr>
                  <td><?=$sn++ ?></td>
                  <td><?=$row['level'] ?></td>
                  <td class="text-left"><?=$row['id'].'. '.$row['question'] ?></td>
                  <td><?=$row['points'] ?></td>
                  <td><?=$row['id'] ?></td>
              </tr>
              <?php endforeach; ?>
              <?php else:; ?>
                <tr>
                  <td colspan="5">Data not available</td>
                </tr>
              <?php endif; ?>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button class="btn btn-primary btn_select_question_submit btn-sm" name="btn_select_question_submit" value="Submit">Submit</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->