$(document).ready(function() {
    $('#validation-form').bootstrapValidator({
        message: 'This value is not valid',
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: 'This field can not be empty'
                    }
                }
            },
            username: {
                message: 'Invalid username field',
                validators: {
                    notEmpty: {
                        message: 'This field can not be empty'
                    },
                    stringLength: {
                        min: 6,
                        max: 6,
                        message: 'Username must be right'
                    },
                }
            },
            password: {
                validators: {
                	notEmpty: {
                        message: 'This field can not be empty'
                	},
                    identical: {
                        field: 'confirm_password',
                        message: 'Password not same with Confrim Password'
                    }
                }
            },
            cpassword: {
                validators: {
                	notEmpty: {
                        message: 'This field can not be empty'
                	},
                    identical: {
                        field: 'password',
                        message: 'Confrim Password not same with Password'
                    }
                }
            },
            gender: {
                validators: {
                    notEmpty: {
                        message: 'This field can not be empty'
                    }
                }
            },
            address: {
                validators: {
                    notEmpty: {
                        message: 'This field can not be empty'
                    }
                }
            },
            place_of_birth: {
                validators: {
                    notEmpty: {
                        message: 'This field can not be empty'
                    }
                }
            },
            date_of_birth: {
                validators: {
                    notEmpty: {
                        message: 'This field can not be empty'
                    },
                    date: {
                        format: 'yyyy/mm/dd',
                        message: 'The date is not a valid'
                    }
                }
            },
            marital_status: {
                validators: {
                    notEmpty: {
                        message: 'This field can not be empty'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'This field can not be empty'
                    },
                    emailAddress: {
                        message: 'Email Address not valid'
                    }
                }
            },
            phone_number: {
                message: 'Invalid Phone Number field',
                validators: {
                    notEmpty: {
                        message: 'This field can not be empty'
                    },
                    stringLength: {
                        min: 12,
                        max: 14,
                        message: 'Phone Number must be right'
                    },
                }
            },
            job: {
                validators: {
                    notEmpty: {
                        message: 'This field can not be empty'
                    }
                }
            },
            salary: {
                validators: {
                    notEmpty: {
                        message: 'This field can not be empty'
                    }
                }
            },
            access_right: {
                validators: {
                    notEmpty: {
                        message: 'This field can not be empty'
                    }
                }
            },
        }
    });
    
});