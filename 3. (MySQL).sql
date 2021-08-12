SELECT 
	user.user_id, first_name, last_name, avg(correct) AS 'correct answer(avg)', max(time_taken) AS 'recent test on'
FROM 
	user
LEFT JOIN 
	test_result
ON 
	user.user_id = test_result.user_id
GROUP BY user_id;