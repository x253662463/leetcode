package solution

func intToRoman(num int) string {
	romanMap := map[int]string{
		1:    "I",
		5:    "V",
		10:   "X",
		50:   "L",
		100:  "C",
		500:  "D",
		1000: "M",
	}

	result := ""

	for {
		if num == 0 {
			break
		}
		if num%10 == 50 {

		}
	}

	return result
}
