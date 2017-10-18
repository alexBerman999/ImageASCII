import sys
import AsciiImageProcess

#Get location of image
loc = sys.argv[1]
#Convert image to ascii art
ascii = AsciiImageProcess.imgToAscii(loc)
print(AsciiImageProcess.asciiArrayToHtml(ascii))
