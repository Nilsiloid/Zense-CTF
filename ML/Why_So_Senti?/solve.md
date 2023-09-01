# Solution

Open the colab notebook given, i.e, Sentiment_Breaker.ipynb. Go through the text and code mentioned and you will see that there are 2 articles provided. The 1st article talks about Sentiment Analysis, the concept used to make this challenge and the 2nd article talks about why Sentiment Analysis is important and usage of TextBlob.

Now, reading the code given, it is quite easy to understand. The function get_textblob_output() essentially takes some input text, converts it to it's TextBlob format, calculates and compares it's polarity with the threshold passed as an argument(if no argument passed, 0.00)

The function check_for_different_inputs() takes a string as an argument and stores it's polarity with the given thresholds and stores them in teacher_model_output and student_model_output accordingly. The output is a success if both polarities are different. This implies that the polarity for the input text should be between 0.00 and 0.25.

If we read the 2nd article a bit carefully, we can notice that "no slow-motion camera" has a polarity of 0.15 which is exactly what we need. Now, change the notebook content in Task 1 to have your input as this and then run Task 1. This will now show you the Congratulations sentence. We have to use this same sentence in the next part, which will actually give us the flag. Running Task 2 with "no slow-motion camera" as the input then gives us the flag!

The flag is:

```
ZENSE{MOD3L_3_RAJNI_OP}
```
