@extends('layouts.main')
@section('title', 'Official Business and Overtime')
@section('content')
<div class="row">
  <div class="span12">
    <div class="pull-left">
      <button type="button" class="btn btn-success btn-small" onclick="location.href='/hrad/obot/add';">New Request</button>
    </div>
  </div>
</div><br/>
<div class="row">
  <div class="span12">
    <table class="table table-condensed table-striped table-hover">
      <thead>
        <tr>
          <th>Reference #</th>
          <th>Type</th>
          <th>Date Requested</th>
          <th>Requestor</th>
          <th>Approver</th>
          <th>Department</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr align="">
          <td><a href="/hrad/obot/view/HR-88881188">HR-88881188</a></td>
          <td>OB</td>
          <td>2013-06-16</td>
          <td>Baluyos, Ridvan Lakas ng Bayan S.</td>
          <td>Santos, Romelo Noel</td>
          <td>Technical</td>
          <td><span class="label label-success">Approved</span></td>
          <td align="center">
            <a href="/hrad/obot/edit/HR-88881188"><i class="icon-pencil"></i></a>
            <a href="#"><i class="icon-remove"></i></a>
          </td>
        </tr>
        <tr align="">
          <td><a href="/hrad/obot/view/HR-88881189">HR-88881189</a></td>
          <td>OB</td>
          <td>2013-06-16</td>
          <td>Baluyos, Ridvan Lakas ng Bayan S.</td>
          <td>Santos, Romelo Noel</td>
          <td>Technical</td>
          <td><span class="label label-warning">Pending</span></td>
          <td align="center">
            <a href="/hrad/obot/edit/HR-88881189"><i class="icon-pencil"></i></a>
            <a href="#"><i class="icon-remove"></i></a>
          </td>
        </tr>
        <tr align="">
          <td><a href="/hrad/obot/view/HR-88881190">HR-88881190</a></td>
          <td>OT</td>
          <td>2013-06-16</td>
          <td>Baluyos, Ridvan Lakas ng Bayan S.</td>
          <td>Santos, Romelo Noel</td>
          <td>Technical</td>
          <td><span class="label label-important">Denied</span></td>
          <td align="center">
            <!-- <a href="/hrad/leave-request"><i class="icon-pencil"></i></a>
            <a href="#"><i class="icon-remove"></i></a> -->
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

@endsection
