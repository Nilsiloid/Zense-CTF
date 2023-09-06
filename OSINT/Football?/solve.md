# Solution

This is an OSINT question that involves multiple steps - they stem from the various hints scattered throughout the question.  

The first hint is the Copyright symbol - the fact that this might contain a clue is supported by the strange output of `exiftool`, as detailed in this capture.  

```
❯ exiftool football.jpeg 
ExifTool Version Number         : 11.88
File Name                       : football.jpeg
Directory                       : .
File Size                       : 191 kB
File Modification Date/Time     : 2023:09:05 13:29:15+05:30
File Access Date/Time           : 2023:09:05 13:29:31+05:30
File Inode Change Date/Time     : 2023:09:05 13:29:15+05:30
File Permissions                : rw-rw-r--
File Type                       : JPEG
File Type Extension             : jpg
MIME Type                       : image/jpeg
Exif Byte Order                 : Big-endian (Motorola, MM)
Current IPTC Digest             : d18d97810cdbc988aace93ac3195b06d
Copyright Notice                : T2xnaWVyZCBQYXF1aXRv
Application Record Version      : 4
XMP Toolkit                     : Image::ExifTool 12.40
Rights                          : Copyright
Image Width                     : 1200
Image Height                    : 800
Encoding Process                : Baseline DCT, Huffman coding
Bits Per Sample                 : 8
Color Components                : 3
Y Cb Cr Sub Sampling            : YCbCr4:2:0 (2 2)
Image Size                      : 1200x800
Megapixels                      : 0.960
```

`T2xnaWVyZCBQYXF1aXRv`, when decoded from Base64, becomes `Olgierd Paquito`. This hilarious username houses a Twitter (`X`, inferred from the question) account with the same name.  

On browsing through the (numerous, sometimes demotivating) tweets, we stumble across [this tweet](https://twitter.com/OlgierdPaquito/status/1697542289932058768), which contains the following clue.

```
Btw, there is a tool used to search for accounts on social media. The password might be related to his close friend's surname.
```

A cursory Google Search for this tool leads us to a possible match - [Sherlock](https://github.com/sherlock-project/sherlock). This leads to the password - `Watson` which unlocks the password-protected file and hence the flag.
