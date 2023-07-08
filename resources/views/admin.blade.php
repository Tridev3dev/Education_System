<table class="table table-striped table-hover">
						<tr>
							<th>
								<span class="custom-checkbox">
									<input type="checkbox" id="selectAll">
									<label for="selectAll"></label>
								</span>
							</th>
							<th>id</th>
							<th>name</th>
							<th>email</th>
                            <th>password</th>
							<th>Actions</th>
						</tr>
						@foreach($data as $data)
						<tr>
							<td>
								<span class="custom-checkbox">
									<input type="checkbox" id="checkbox1" name="options[]" value="1">
									<label for="checkbox1"></label>
								</span>
							</td>
								<td>{{$data->id}}</td>
								<td>{{$data->name}}</td>
								<td>{{$data->email}}</td>
                                <td>{{$data->password}}</td>
                                <td>{{$data->action}}</td>
								</td>