# Solution

Upon opening the PDF, we see that there is some text written and an image attached showing some Russian symbols. Upon choosing all the text written, you'll notice that there is some text which is written in the white font. This is actually a link to a YouTube video.

Clicking on it will rick roll us xD. So that means there's nothing else that is there to do on the pdf itself. Let's download the [PDF]() and see if we can do anything. The most basic thing to do is check the `strings` data of the PDF. We are also hinted to do this through the `lower level` moniker present in the file's content.

Thus, I ran the following command.

```
strings very_strange_document.pdf > out.txt
```

This gave us an `out.txt` file with all the strings data of the PDF. Lo and behold, in the very 4th line is present the thing we desire, the flag!!

The flag is:

```
ZENSE{PDFS_AR3_UWOTM8_H3X}
```
