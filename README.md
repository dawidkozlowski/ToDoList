# ToDoList

###Table structure for table `task_list`

```
CREATE TABLE `task_list` (
  `task_list_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `task_details` text NOT NULL,
  `task_status` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `task_list`
  ADD PRIMARY KEY (`task_list_id`);

ALTER TABLE `task_list`
  MODIFY `task_list_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
```
