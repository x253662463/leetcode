package _1TwoSum

import "testing"

func TestTwoSum(t *testing.T) {
	nums := []int{2, 7, 11, 15}
	target := 9
	expect := []int{0, 1}
	re := twoSum(nums, target)
	if re != expect {
		t.Fail()
	}
}
