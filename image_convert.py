#!/usr/bin/env python3

import sys
from PIL import Image

char_scale = "MNBKVFT|;:."  # List of characters from light to dark by apparent shading


def img_to_ascii(img_path):
    """
    Convert image file to ascii art list.

    :param img_path: path to image file to convert

    :return: A list representing the ascii art image as ascii
    """
    with Image.open(img_path, 'r') as img:
        scale_size = (300, int(img.size[1] * (150/img.size[0])))
        img = img.resize(scale_size, Image.ANTIALIAS)
        # Convert to greyscale
        img = img.convert('L')
        # Gets value of only red pixels as, in a greyscale image, r = g = b
        pixels = list(img.getdata(0))
        width, height = img.size
        # Reformatting into a 2D array
        pixels = [pixels[i * width:(i + 1) * width] for i in range(height)]
        # Storing corresponding ascii image characters arrangement in an array to be returned
        ascii_img_chars = []
        for i in range(height):
            ascii_img_chars.append([])
            for j in range(width):
                val = int(pixels[i][j] / (256 / len(char_scale)))
                ascii_img_chars[i].append(char_scale[val])
        return ascii_img_chars


def ascii_array_to_html(ascii_list):
    """
    Turn an ascii_list character array into an html string for use in a web page.

    :param ascii_list: ascii art image as list
    :type ascii_list: iterable

    :return: html representation of ascii image
    """
    html = '<div id="asciiArt" style="font-size: 0.3%;">\n'
    html += '<br>\n'.join(''.join(row) for row in ascii_list)
    html += '\n</div>\n'
    return html


# Get location of image
loc = sys.argv[1]
# Convert image to ascii_list art
ascii_img = img_to_ascii(loc)
print(ascii_array_to_html(ascii_img))
