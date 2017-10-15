import numpy
from PIL import Image

charScale = "@%#*+=-:.\" " #List of characters from light to dark by apparant shading
scale = 0.125 #Scale to modify image size by

def imgToAscii(imgPath):
  #Read image
  img = Image.open(imgPath, "r")
  #Reduce image size
  scaleSize = (int(img.size[0] * 2 * scale), int(img.size[1] * scale)) #Double width as characters are taller than they are wide
  img = img.resize(scaleSize, Image.ANTIALIAS)
  #Convert to greyscale
  img = img.convert('L')
  
  #Get data of pixels
  pixels = list(img.getdata(0)) #Gets value of only red pixels as, in a greyscale image, r = g = b
  width, height = img.size
  pixels = [pixels[i * width:(i + 1) * width] for i in range(height)] #reformating into a 2D array
  
#Storing corresponding ascii arrangement in an array to be returned
  asciiImgChars = []
  for i in range(height):
    asciiImgChars.append([])
    for j in range(width):
      val = int(pixels[i][j]/(256 / len(charScale)))
      asciiImgChars[i].append(charScale[val])
  return asciiImgChars

#Turn an ascii character array into an html string for use in a webpage
def asciiArrayToHtml(ascii):
  html = "<div id=\"asciiArt\">\n"
  for i in range(len(ascii)):
    for j in range(len(ascii[0])):
      html += ascii[i][j]
    html += "<br>\n"
  html += "</div>"
  return html

#ascii = imgToAscii(img)
#f = open("tests/test.txt", "w")
#for i in range(len(ascii)):
#    for j in range(len(ascii[0])):
#      f.write(ascii[i][j])
#    f.write("\n")
#f.write(asciiArrayToHtml(ascii))
#f.close()
