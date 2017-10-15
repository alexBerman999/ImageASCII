import sys
import AsciiImageProcess

#Get location of image
loc = sys.argv[1]
#Convert image to ascii art
ascii = AsciiImageProcess.imgToAscii(loc)
#Open new file. TODO: Change name of file to make unique
f = open("test.html", "w")
#Consistent stuff
f.write("<html>\n\t<head>\n\t\t<title></title>\n\t\t<meta content=\"\">\n\t\t<link rel=\"stylesheet\" href=\"css/style.css\">\n\t</head>\n\t<body>\n\t\t<h1>\n\t\t\tASCII Converter\n\t\t</h1>")
f.write(AsciiImageProcess.asciiArrayToHtml(ascii))
f.write("\n\t\t<div id=\"img\">\n\t\t\t<img src = " + loc + " alt=\"Image\">\n\t\t</div>\n\t</body>\n</html>")
f.close()
