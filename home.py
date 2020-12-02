import time
import os
from selenium.webdriver.common.keys import Keys
from selenium import webdriver
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from selenium.common.exceptions import TimeoutException
from selenium.webdriver.support.ui import Select

# Basic Functions
def scrollPageDown(driver):
    driver.execute_script("window.scrollTo(0, 180)")

def scrollPageUp(driver):
    driver.find_element_by_tag_name('body').send_keys(Keys.PAGE_UP)


# Website Address
auctionsiteurl = "http://localhost/auction/"


# Locators
homebutton = "//a[contains(text(),'Home')]"
searchbutton = "//a[contains(text(),'Search')]"
loginbutton = "//a[contains(text(),'Login')]"
registrationbutton = "//a[contains(text(),'Registration')]"
productsbutton = "//a[contains(text(),'Products')]"
aboutusbutton = "//a[contains(text(),'AboutUs')]"
usernameinput = "//input[@id='username']"
passwordforlogin = "//input[@id='password']"
submitbuttonlogin = "//input[@id='submit']"
registrationemail = "//input[@id='mail']"
registrationclickbutton = "//input[@id='submit']"
enterlocation = "//input[@id='loc']"
enterprice = "//input[@id='price']"
enterproductname = "//input[@id='name']"
entersellerid = "//input[@id='sid']"
enterdate = "//input[@id='dat']"
searchbuttonclick = "//input[@id='submit']"
productname = "//input[@id='productname']"
productdescription = "//input[@id='description']"
minbidprice = "//input[@id='minbid']"
startdate = "//input[@id='sdate']"
enddate = "//input[@id='edate']"
category = "//select[@id='category']"
productimage = "//input[@id='productimage']"
additem = "//input[@id='submit']"

# Credentials
validusername = "admin"
validpassword = "admin"
invalidusername = "test"
invalidpassword = "password"
validemail = "random@gmail.com"
invalidemail = "864312#"
validlocation = "mumbai"
invalidlocation = "1"
validprice = "10000"
invalidprice = "-1"
validproductname = "bike"
invalidproductname = "@68345643%)!!~"
validsellerid = "3112"
invalidsellerid = "@"
validprice = "98461"
invalidprice = "-1"
description = "The product is in very good condition."
validstartdate = "01/23/2020"
validenddate = "02/12/2020"


#Connecting Driver
def setup():
    chromedriver = "C:/Users/Lenovo/Downloads/chromedriver.exe"
    driver = webdriver.Chrome(chromedriver)
    driver.implicitly_wait(15)
    driver.maximize_window()
    driver.get(auctionsiteurl)
    time.sleep(5)
    return driver

# Testing of search Page
def testforsearch():
    driver = setup()
    driver.find_element_by_xpath(searchbutton).click()
    time.sleep(1)

    # Test for location
    # Invalid input
    driver.find_element_by_xpath(enterlocation).send_keys(invalidlocation)
    driver.find_element_by_xpath(searchbuttonclick).click()
    try:
        WebDriverWait(driver, 5).until(EC.alert_is_present())
        alert = driver.switch_to.alert
        alert.accept()
        alert = driver.switch_to.alert
        alert.accept()
        driver.save_screenshot("Invalid_Loaction.png")
    except TimeoutException:
        driver.save_screenshot("Valid_Loaction.png")

    #Valid input
    time.sleep(2)
    driver.find_element_by_xpath(enterlocation).clear()
    driver.find_element_by_xpath(enterlocation).send_keys(validlocation)
    driver.find_element_by_xpath(searchbuttonclick).click()
    try:
        WebDriverWait(driver, 5).until(EC.alert_is_present())
        alert = driver.switch_to.alert
        alert.accept()
        alert = driver.switch_to.alert
        alert.accept()
        driver.save_screenshot("Invalid_Loaction.png")
    except TimeoutException:
        driver.save_screenshot("Valid_Loaction.png")

    # Test for Prize
    # Invalid input
    driver.find_element_by_xpath(searchbutton).click()
    driver.find_element_by_xpath(enterprice).send_keys(invalidprice)
    driver.find_element_by_xpath(searchbuttonclick).click()
    try:
        WebDriverWait(driver, 5).until(EC.alert_is_present())
        alert = driver.switch_to.alert
        alert.accept()
        alert = driver.switch_to.alert
        alert.accept()
        alert = driver.switch_to.alert
        alert.accept()
        driver.save_screenshot("Invalid_price.png")
    except TimeoutException:
        driver.save_screenshot("Valid_price.png")

    #Valid input
    time.sleep(2)
    driver.find_element_by_xpath(enterprice).clear()
    driver.find_element_by_xpath(enterprice).send_keys(validprice)
    driver.find_element_by_xpath(searchbuttonclick).click()
    try:
        WebDriverWait(driver, 5).until(EC.alert_is_present())
        alert = driver.switch_to.alert
        alert.accept()
        alert = driver.switch_to.alert
        alert.accept()
        alert = driver.switch_to.alert
        alert.accept()
        driver.save_screenshot("Invalid_price.png")
    except TimeoutException:
        driver.save_screenshot("Valid_price.png")


    # Test for Product Name
    # Invalid input
    driver.find_element_by_xpath(searchbutton).click()
    driver.find_element_by_xpath(enterproductname).send_keys(invalidproductname)
    driver.find_element_by_xpath(searchbuttonclick).click()
    driver.save_screenshot("Invalid_ProductName.png")

    #Valid input
    time.sleep(2)
    driver.find_element_by_xpath(searchbutton).click()
    driver.find_element_by_xpath(enterproductname).send_keys(validproductname)
    driver.find_element_by_xpath(searchbuttonclick).click()
    driver.save_screenshot("Valid_ProductName.png")

    driver.close()

# Testing of Login Page
def testforlogin():
    driver = setup()
    driver.find_element_by_xpath(loginbutton).click()
    time.sleep(1)

    # Invalid Login
    driver.find_element_by_xpath(usernameinput).send_keys(invalidusername)
    time.sleep(1)
    driver.find_element_by_xpath(passwordforlogin).send_keys(invalidpassword)
    time.sleep(1)
    driver.find_element_by_xpath(submitbuttonlogin).click()
    time.sleep(2)
    try:
        WebDriverWait(driver, 5).until(EC.alert_is_present())
        alert = driver.switch_to.alert
        alert.accept()
        driver.save_screenshot("failed_login.png")
    except TimeoutException:
        print("no alert")

    # Valid Login
    time.sleep(1)
    driver.find_element_by_xpath(usernameinput).send_keys(validusername)
    time.sleep(1)
    driver.find_element_by_xpath(passwordforlogin).send_keys(validpassword)
    time.sleep(1)
    driver.find_element_by_xpath(submitbuttonlogin).click()
    time.sleep(2)
    try:
        WebDriverWait(driver, 5).until(EC.alert_is_present())

        alert = driver.switch_to.alert
        alert.accept()
        driver.save_screenshot("failed_login.png")
    except TimeoutException:
        driver.save_screenshot("Successful_login.png")

    driver.close()

# Testing of Registration Page
def testforregistration():
    driver = setup()
    driver.find_element_by_xpath(registrationbutton).click()
    time.sleep(1)

    # Invalid Email
    driver.find_element_by_xpath(registrationemail).send_keys(invalidemail)
    driver.find_element_by_xpath(registrationclickbutton).click()
    driver.save_screenshot("Failed_registration.png")

    # Valid Email
    driver.find_element_by_xpath(registrationemail).clear()
    driver.find_element_by_xpath(registrationemail).send_keys(validemail)
    driver.find_element_by_xpath(registrationclickbutton).click()
    driver.save_screenshot("Successful_registration.png")

    driver.close()

# Testing for Product Add page
def testforaddproduct():
    driver = setup()
    driver.find_element_by_xpath(loginbutton).click()
    driver.find_element_by_xpath(usernameinput).send_keys(validusername)
    driver.find_element_by_xpath(passwordforlogin).send_keys(validpassword)
    driver.find_element_by_xpath(submitbuttonlogin).click()
    time.sleep(5)
    scrollPageDown(driver)
    time.sleep(1)

    # Invalid Details
    driver.find_element_by_xpath(productname).send_keys('')
    driver.find_element_by_xpath(additem).click()
    driver.save_screenshot('No_Input_error.png')

    driver.find_element_by_xpath(productname).send_keys(invalidproductname)
    driver.find_element_by_xpath(productdescription).send_keys(description)
    driver.find_element_by_xpath(minbidprice).send_keys(invalidprice)
    driver.find_element_by_xpath(startdate).send_keys(validstartdate)
    driver.find_element_by_xpath(enddate).send_keys(validenddate)
    temp = Select(driver.find_element_by_xpath(category))
    temp.select_by_visible_text('ANTIQUE BIKE')
    driver.find_element_by_xpath(productimage).send_keys(os.getcwd()+"/image.jpg")
    driver.find_element_by_xpath(additem).click()
    try:
        WebDriverWait(driver, 5).until(EC.alert_is_present())
        alert = driver.switch_to.alert
        alert.accept()
        alert = driver.switch_to.alert
        alert.accept()
        driver.save_screenshot("Invalid_product_details.png")
    except TimeoutException:
        driver.save_screenshot("Valid_product_details.png")

    # Valid Details
    time.sleep(2)
    scrollPageDown(driver)
    driver.find_element_by_xpath(productname).send_keys(validproductname)
    driver.find_element_by_xpath(productdescription).send_keys(description)
    driver.find_element_by_xpath(minbidprice).send_keys(validprice)
    driver.find_element_by_xpath(startdate).send_keys(validstartdate)
    driver.find_element_by_xpath(enddate).send_keys(validenddate)
    temp = Select(driver.find_element_by_xpath(category))
    temp.select_by_visible_text('ANTIQUE BIKE')
    driver.find_element_by_xpath(productimage).send_keys(os.getcwd() + "/image.jpg")
    driver.find_element_by_xpath(additem).click()
    try:
        WebDriverWait(driver, 5).until(EC.alert_is_present())
        alert = driver.switch_to.alert
        alert.accept()
        driver.save_screenshot("Valid_product_details.png")
    except TimeoutException:
        driver.save_screenshot("Failed_to_add_product.png")

    driver.close()

# Final call for all the function
testforsearch()
testforregistration()
testforlogin()
testforaddproduct()
